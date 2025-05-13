@extends('layouts.app')

@section('title', 'Beginner Dashboard')

@section('content')
<div class="bg-white shadow rounded p-6">
    <h2 class="text-2xl font-semibold mb-4">Welcome to the Beginner's Workout Dashboard!</h2>
    <p class="mb-4">Here, you'll find workout plans tailored to your fitness level. As a beginner, you'll start with the fundamentals, including bodyweight exercises, stretching, and basic mobility routines.</p>

    <div class="mt-8">
        <h3 class="font-semibold text-lg">Recommended Workouts:</h3>
        <ul class="list-disc pl-5 mt-2 text-sm text-gray-700">
            <li>Push-ups (3 sets of 10)</li>
            <li>Squats (3 sets of 15)</li>
            <li>Planks (Hold for 30 seconds)</li>
            <li>Leg Raises (3 sets of 10)</li>
        </ul>
    </div>

    <div class="mt-8">
        <h3 class="font-semibold text-lg">Nutrition Tips:</h3>
        <ul class="list-disc pl-5 mt-2 text-sm text-gray-700">
            <li>Stay hydrated!</li>
            <li>Eat a balanced diet with lean proteins, vegetables, and whole grains.</li>
            <li>Don't skip breakfast, and try to eat smaller, more frequent meals throughout the day.</li>
        </ul>
    </div>
</div>
@endsection
