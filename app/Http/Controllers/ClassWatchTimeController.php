<?php

namespace App\Http\Controllers;

use App\Models\ClassWatchTime;
use App\Models\Subscription;
use Illuminate\Http\Request;

class ClassWatchTimeController extends Controller
{
    public function recordWatchTime(Request $request)
    {
        $classWatchTime = ClassWatchTime::create([
            'class_id' => $request->class_id,
            'user_id' => $request->user_id,
            'watch_time' => $request->watch_time,
        ]);

        return response()->json($classWatchTime);
    }

    public function distributeRevenue()
    {
        $subscriptions = Subscription::all();
        $totalNetAmount = $subscriptions->sum('net_amount');

        $totalWatchTime = ClassWatchTime::sum('watch_time');
        $classWatchTimes = ClassWatchTime::all();

        $distribution = [];

        foreach ($classWatchTimes as $classWatchTime) {
            $percentage = $classWatchTime->watch_time / $totalWatchTime;
            $revenue = $percentage * $totalNetAmount;

            $distribution[] = [
                'mentor_id' => $classWatchTime->class->mentor_id,
                'class_name' => $classWatchTime->class->name,
                'watch_time' => $classWatchTime->watch_time,
                'percentage' => $percentage,
                'revenue' => $revenue
            ];
        }

        return response()->json($distribution);
    }
}
