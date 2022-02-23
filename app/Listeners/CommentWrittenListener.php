<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\CommentWritten;
use App\Events\AchievementUnlocked;
use App\Services\AchievementService;

class CommentWrittenListener
{
    /**
    * @var AchievementService|null
    */
    protected $achievement_service;


    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->achievement_service = new AchievementService();
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CommentWritten $event)
    {
        $user = $event->user;
        
        $archivement_name = $this->achievement_service->unlockCommentAchievement($user);
        if($archivement_name != null)
        {
            event(new AchievementUnlocked($archivement_name, $user));
        }

        $badge_name = $this->achievement_service->unlockBadge($user);
        if($badge_name != User::STRING_BADGE_1)
        {
            event(new BadgeUnlocked($badge_name, $user));
        }

        return 0;
    }
}
