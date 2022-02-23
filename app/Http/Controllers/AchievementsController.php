<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\AchievementService;

class AchievementsController extends Controller
{

    /**
    * @var AchievementService|null
    */
    protected $achievement_service;

    public function __construct()
    {
        $this->achievement_service = new AchievementService();
    }

    public function index(User $user)
    {
        $unlocked_achievements = array_merge($this->achievement_service->getUnlockedCommentAchievements($user), 
                                             $this->achievement_service->getUnlockedLessonAchievements($user));

        $next_available_achievements = array($this->achievement_service->getNextCommentAchievement($user), 
                                             $this->achievement_service->getNextCommentAchievement($user));
        
        $current_badge = $this->achievement_service->getBadgeStatus($user, true)['name']; // second param = true : current badge, = false : next badge

        $next_badge = $this->achievement_service->getBadgeStatus($user, false)['name'];

        $remaing_to_unlock_next_badge = $this->achievement_service->getRemaingToUnlockNextBadge($user);

        return response()->json([
            'unlocked_achievements' => $unlocked_achievements,
            'next_available_achievements' => $next_available_achievements,
            'current_badge' => $current_badge,
            'next_badge' => $next_badge,
            'remaing_to_unlock_next_badge' => $remaing_to_unlock_next_badge,
        ]);
    }
}
