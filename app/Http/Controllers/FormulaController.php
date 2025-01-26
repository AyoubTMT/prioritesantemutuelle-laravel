<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FormulaService;

class FormulaController extends Controller
{
    protected $formulaService;

    public function __construct(FormulaService $formulaService)
    {
        $this->formulaService = $formulaService;
    }

    /**
     * Suggest the best formula for the given user choices.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function suggestFormula(Request $request)
    {
        \Log::info('data  received:: '.json_encode($request->all()));

        // Validate the incoming request
        $validated = $request->validate([
            'soins' => 'required|string',
            'hospitalisation' => 'required|string',
            'optique' => 'required|string',
            'aides_auditives' => 'required|string',
            'dentaire' => 'required|string',
            'medecines_douces' => 'required|string'
        ]);

        // Call the FormulaService to determine the best formula
        $formulaResponse = $this->formulaService->suggestFormula($validated);

        return response()->json($formulaResponse, 200);
    }
}
