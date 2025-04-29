<?php

namespace App\Service;

use potibm\Bluesky\Response\RecordResponse;
use potibm\Bluesky\BlueskyApi;
use potibm\Bluesky\BlueskyPostService;
use potibm\Bluesky\Feed\Post;

class BlueService
{
    //cid : bafyreia5hne6evfsrzbmrqtuoplbwhvcbf2wfso2zz6y43hgg3qkm4bvym
    //$postService = new \potibm\Bluesky\BlueskyPostService($api);
    private ?BlueskyApi $api = null;

    public function __construct(private string $account, private string $password)
    {
        if($this->api === null)
        {
            $this->api = new BlueskyApi($this->account, $this->password);
        }
    }
    
    public function SendMessage(string $message): RecordResponse
    {           
        $post = Post::create($message);
        return $this->api->createRecord($post);        
    }

    private function ResetToken()
    {
        $this->api = new BlueskyApi($this->account, $this->password);
    }
    
    public function SendMessage2(string $message, int $retry = 0)
    {           
        if($retry > 5)
        {
            return;
        }

        $post = Post::create($message);
        try {
            return $this->api->createRecord($post);
        } catch (\potibm\Bluesky\Exception\HttpRequestException $e) {
            echo 'Error performing request on HTTP level: ' . $e->getMessage();
        } catch (\potibm\Bluesky\Exception\AuthenticationErrorException $e) {
            echo 'Unable to authorize: ' . $e->getMessage();
        } catch (\potibm\Bluesky\Exception\HttpStatusCodeException $e) {
            echo 'Unable to perform request on API level: ' . $e->getMessage();
        } catch (\potibm\Bluesky\Exception\InvalidPayloadException $e) {
            echo 'Received unserializable JSON payload: ' . $e->getMessage();
        }
        sleep(10);
        $this->ResetToken();
        $this->SendMessage($message, $retry++);
    }




}