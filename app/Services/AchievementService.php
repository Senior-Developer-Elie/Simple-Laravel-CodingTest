<?php

namespace App\Services;
use App\Models\User;
use App\Models\Comment;
use App\Models\Lesson;

class AchievementService
{
    //--------------------------------------------------------------------------
    //---------------------------achievement------------------------------------
    //--------------------------------------------------------------------------

    public function getUnlockedCommentAchievements(User $user)
    {
        $commnet_written_achievements = [];
        $comment_count = count($user->comments->toArray());

        //comment achievement 1
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_1 && $comment_count < Comment::NUMBER_COMMENT_WRITTEN_2)
        {
            $commnet_written_achievements[] = Comment::STRING_COMMENT_WRITTEN_1;
        }

        //comment achievement 2
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_2 && $comment_count < Comment::NUMBER_COMMENT_WRITTEN_3)
        {
            $commnet_written_achievements[] = Comment::STRING_COMMENT_WRITTEN_2;
        }

        //comment achievement 3
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_3 && $comment_count < Comment::NUMBER_COMMENT_WRITTEN_4)
        {
            $commnet_written_achievements[] = Comment::STRING_COMMENT_WRITTEN_3;
        }

        //comment achievement 4
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_4 && $comment_count < Comment::NUMBER_COMMENT_WRITTEN_5)
        {
            $commnet_written_achievements[] = Comment::STRING_COMMENT_WRITTEN_4;
        }

        //comment achievement 5
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_5)
        {
            $commnet_written_achievements[] = Comment::STRING_COMMENT_WRITTEN_5;
        }

        return $commnet_written_achievements;
    }

    public function getUnlockedLessonAchievements(User $user)
    {
        $lesson_watched_achievements = [];
        $watched_lessons_count = count($user->watched->toArray());

        //lesson watched achievement 1
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_1 && $watched_lessons_count < Lesson::NUMBER_LESSON_WATCHED_2)
        {
            $lesson_watched_achievements[] = Lesson::STRING_LESSON_WATCHED_1;
        }

        //lesson watched achievement 2
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_2 && $watched_lessons_count < Lesson::NUMBER_LESSON_WATCHED_3)
        {
            $lesson_watched_achievements[] = Lesson::STRING_LESSON_WATCHED_2;
        }

        //lesson watched achievement 3
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_3 && $watched_lessons_count < Lesson::NUMBER_LESSON_WATCHED_4)
        {
            $lesson_watched_achievements[] = Lesson::STRING_LESSON_WATCHED_3;
        }

        //lesson watched achievement 4
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_4 && $watched_lessons_count < Lesson::NUMBER_LESSON_WATCHED_5)
        {
            $lesson_watched_achievements[] = Lesson::STRING_LESSON_WATCHED_4;
        }

        //lesson watched achievement 5
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_5)
        {
            $lesson_watched_achievements[] = Lesson::STRING_LESSON_WATCHED_5;
        }

        return $lesson_watched_achievements;
    }


    public function unlockCommentAchievement(User $user)
    {
        $commnet_written_achievements = [];
        $comment_count = count($user->comments->toArray());

        switch ($comment_count)
        {
            case Comment::NUMBER_COMMENT_WRITTEN_1:
                return Comment::STRING_COMMENT_WRITTEN_1;
            break;

            case Comment::NUMBER_COMMENT_WRITTEN_2:
                return Comment::STRING_COMMENT_WRITTEN_2;
            break;

            case Comment::NUMBER_COMMENT_WRITTEN_3:
                return Comment::STRING_COMMENT_WRITTEN_3;    
            break;

            case Comment::NUMBER_COMMENT_WRITTEN_4:
                return Comment::STRING_COMMENT_WRITTEN_4;
            break;

            case Comment::NUMBER_COMMENT_WRITTEN_5:
                return Comment::STRING_COMMENT_WRITTEN_5;
            break;
        }

        return null;
    }

    public function UnlockLessonAchievement(User $user)
    {
        $lesson_watched_achievements = [];
        $watched_lessons_count = count($user->watched->toArray());

        switch ($watched_lessons_count)
        {
            case Lesson::NUMBER_LESSON_WATCHED_1:
                return Lesson::STRING_LESSON_WATCHED_1;
            break;

            case Lesson::NUMBER_LESSON_WATCHED_2:
                return Lesson::STRING_LESSON_WATCHED_2;
            break;

            case Lesson::NUMBER_LESSON_WATCHED_3:
                return Lesson::STRING_LESSON_WATCHED_3;    
            break;

            case Lesson::NUMBER_LESSON_WATCHED_4:
                return Lesson::STRING_LESSON_WATCHED_4;
            break;

            case Lesson::NUMBER_LESSON_WATCHED_5:
                return Lesson::STRING_LESSON_WATCHED_5;
            break;
        }

        return null;
    }

    public function getNextCommentAchievement(User $user)
    {
        $comment_count = count($user->comments->toArray());

        //comment achievement 1
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_1 && $comment_count < Comment::NUMBER_COMMENT_WRITTEN_2)
        {
            return Comment::STRING_COMMENT_WRITTEN_2;
        }

        //comment achievement 2
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_2 && $comment_count < Comment::NUMBER_COMMENT_WRITTEN_3)
        {
            return Comment::STRING_COMMENT_WRITTEN_3;
        }

        //comment achievement 3
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_3 && $comment_count < Comment::NUMBER_COMMENT_WRITTEN_4)
        {
            return Comment::STRING_COMMENT_WRITTEN_4;
        }

        //comment achievement 4
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_4 && $comment_count < Comment::NUMBER_COMMENT_WRITTEN_5)
        {
            return Comment::STRING_COMMENT_WRITTEN_5;
        }

        //comment achievement 5
        if($comment_count >= Comment::NUMBER_COMMENT_WRITTEN_5)
        {
            return Comment::STRING_COMMENT_WRITTEN_5;
        }

        return Comment::STRING_COMMENT_WRITTEN_1;
    }   

    public function getNextLessonWatchedAchievement(User $user)
    {
        $watched_lessons_count = count($user->watched->toArray());

        //lesson watched achievement 1
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_1 && $watched_lessons_count < Lesson::NUMBER_LESSON_WATCHED_2)
        {
            return Lesson::STRING_LESSON_WATCHED_2;
        }

        //lesson watched achievement 2
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_2 && $watched_lessons_count < Lesson::NUMBER_LESSON_WATCHED_3)
        {
            return Lesson::STRING_LESSON_WATCHED_3;
        }

        //lesson watched achievement 3
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_3 && $watched_lessons_count < Lesson::NUMBER_LESSON_WATCHED_4)
        {
            return Lesson::STRING_LESSON_WATCHED_4;
        }

        //lesson watched achievement 4
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_4 && $watched_lessons_count < Lesson::NUMBER_LESSON_WATCHED_5)
        {
            return Lesson::STRING_LESSON_WATCHED_5;
        }

        //lesson watched achievement 5
        if($watched_lessons_count >= Lesson::NUMBER_LESSON_WATCHED_5)
        {
            return Lesson::STRING_LESSON_WATCHED_5;
        }

        return Lesson::STRING_LESSON_WATCHED_1;
    }

    //----------------------------------------------------------------------------
    //----------------------------badge-------------------------------------------
    //----------------------------------------------------------------------------

    public function unlockBadge($user)
    {
        $achievement_count = count($this->getUnlockedCommentAchievements($user)) + count($this->getUnlockedLessonAchievements($user));
        
        switch($achievement_count)
        {
            case User::NUMBER_BADGE_2;
                return User::STRING_BADGE_2;
            break;

            case User::NUMBER_BADGE_3;
                return User::STRING_BADGE_3;
            break;

            case User::NUMBER_BADGE_4;
                return User::STRING_BADGE_4;
            break;

        }

        return User::STRING_BADGE_1;
    }

    public function getBadgeStatus(User $user, $is_current = true) //$is_current = true : current badge, $is_current = false: next badge
    {
        $achievement_count = count($this->getUnlockedCommentAchievements($user)) + count($this->getUnlockedLessonAchievements($user));
        
        if($achievement_count >= User::NUMBER_BADGE_2 && $achievement_count < User::NUMBER_BADGE_3)
        {
            if($is_current)
                return ['name' => User::STRING_BADGE_2, 'count' => User::NUMBER_BADGE_2];
            else
                return ['name' => User::STRING_BADGE_3, 'count' => User::NUMBER_BADGE_3];
        }

        if($achievement_count >= User::NUMBER_BADGE_3 && $achievement_count < User::NUMBER_BADGE_4)
        {
            if($is_current)
                return ['name' => User::STRING_BADGE_3, 'count' => User::NUMBER_BADGE_3];
            else 
                return ['name' => User::STRING_BADGE_4, 'count' => User::NUMBER_BADGE_4];
        }
        if($achievement_count >= User::NUMBER_BADGE_4)
        {
            return ['name' => User::STRING_BADGE_4, 'count' => User::NUMBER_BADGE_4];
        }

        if($is_current)   
            return ['name' => User::STRING_BADGE_1, 'count' => User::NUMBER_BADGE_1];
        else
            return ['name' => User::STRING_BADGE_2, 'count' => User::NUMBER_BADGE_2];
        
    }

    public function getRemaingToUnlockNextBadge($user)
    {
        $achievement_count = count($this->getUnlockedCommentAchievements($user)) + count($this->getUnlockedLessonAchievements($user));
        $next_badge = $this->getBadgeStatus($user, false);

        $remaining_achievement_count = $next_badge['count'] - $achievement_count;
        
        return $remaining_achievement_count;
        
    }


}