<?php

namespace App\Observers;

use App\Events\ChatEvent;
use App\Events\ChatMessageCreated;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Log;

class ChatMessageObserver
{
    /**
     * Handle the ChatMessage "created" event.
     *
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return void
     */
    public function created(ChatMessage $chatMessage)
    {
        Log::info('new chat message:: ',['data'=>$chatMessage]);
        broadcast(new ChatMessageCreated($chatMessage));
    }

    /**
     * Handle the ChatMessage "updated" event.
     *
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return void
     */
    public function updated(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Handle the ChatMessage "deleted" event.
     *
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return void
     */
    public function deleted(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Handle the ChatMessage "restored" event.
     *
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return void
     */
    public function restored(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Handle the ChatMessage "force deleted" event.
     *
     * @param  \App\Models\ChatMessage  $chatMessage
     * @return void
     */
    public function forceDeleted(ChatMessage $chatMessage)
    {
        //
    }
}
