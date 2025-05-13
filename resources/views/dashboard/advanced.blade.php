@extends('layouts.app')

@section('title', 'Advanced Dashboard')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6">
                <h3 class="text-2xl font-semibold mb-4">Welcome to the Advanced Workout Dashboard!</h3>
                <p class="mb-4">At this stage, you're ready for advanced training. You'll be incorporating complex movements, heavy weights, and intense cardio to push your limits.</p>
                
                <div class="mt-8">
                    <h4 class="font-semibold">Recommended Workouts:</h4>
                    <ul class="list-disc pl-5">
                        <li>Deadlifts (5 sets of 5)</li>
                        <li>Pull-ups (4 sets of 15)</li>
                        <li>Barbell Squats (4 sets of 10)</li>
                        <li>HIIT Cardio (30 mins)</li>
                    </ul>
                </div>

                <div class="mt-8">
                    <h4 class="font-semibold">Nutrition Tips:</h4>
                    <ul class="list-disc pl-5">
                        <li>Maintain a calorie surplus for muscle growth.</li>
                        <li>Consume complex carbs and lean proteins to fuel your intense workouts.</li>
                        <li>Hydrate well, and consider post-workout shakes for recovery.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection