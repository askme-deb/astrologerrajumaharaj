<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class PredictionController extends Controller
{
    /**
     * Return mock/dynamic predictions for a zodiac, date, and category.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(Request $request)
    {
        $sign = strtolower($request->input('sign', 'aries'));
        $date = $request->input('date', date('Y-m-d'));
        $category = strtolower($request->input('category', 'personal'));
        $validSigns = [
            'aries','taurus','gemini','cancer','leo','virgo','libra','scorpio','sagittarius','capricorn','aquarius','pisces'
        ];
        $validCategories = [
            'personal','health','profession','emotions','travel','luck'
        ];
        if (!in_array($sign, $validSigns) || !in_array($category, $validCategories)) {
            return response()->json(['error' => 'Invalid input.'], 400);
        }
        // For demo, return static/dummy content. Replace with real API/data as needed.
        $predictions = [
            'personal' => 'This day promises a mix of excitement and stability. Engage with loved ones and explore activities that bring joy and growth.',
            'health' => 'Your health remains steady. Focus on hydration, balanced meals, and short breaks to recharge your energy.',
            'profession' => 'Professional matters favor clear communication. Strategic planning will help you overcome minor challenges.',
            'emotions' => 'Emotional clarity improves today. Express feelings calmly and avoid impulsive reactions.',
            'travel' => 'Short-distance travel is favorable. Plan ahead to avoid last-minute stress.',
            'luck' => 'Luck supports thoughtful decisions. Trust your intuition while staying grounded.'
        ];
        $text = $predictions[$category] ?? 'Have a positive day!';
        return response()->json([
            'sign' => $sign,
            'date' => $date,
            'category' => $category,
            'prediction' => $text
        ]);
    }
}
