@extends('layouts.app')

@section('title', 'Intermediate Dashboard')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6">
                <h3 class="text-2xl font-semibold mb-4">Welcome to the Intermediate Workout Dashboard!</h3>
                <p class="mb-4">Now that you're past the basics, it's time to challenge yourself with more intense exercises. In the intermediate stage, we'll add resistance, more complex movements, and build endurance.</p>
                
                <div class="mt-8">
                    <h4 class="font-semibold">Recommended Workouts:</h4>
                    <ul class="list-disc pl-5">
                        <li>Push-ups with clap (3 sets of 12)</li>
                        <li>Weighted Squats (4 sets of 12)</li>
                        <li>Burpees (3 sets of 15)</li>
                        <li>Mountain Climbers (3 sets of 20)</li>
                    </ul>
                </div>

                <div class="mt-8">
                    <h4 class="font-semibold">Nutrition Tips:</h4>
                    <ul class="list-disc pl-5">
                        <li>Increase protein intake to support muscle growth.</li>
                        <li>Focus on eating clean carbs and healthy fats.</li>
                        <li>Consider adding supplements like BCAAs and creatine for muscle recovery.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection