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

    public function suggestFormula(Request $request)
    {
        $validated = $request->validate([
            'soins' => 'required|string',
            'hospitalisation' => 'required|string',
            'optique' => 'required|string',
            'aides_auditives' => 'required|string',
            'dentaire' => 'required|string',
            'medecines_douces' => 'required|string',
        ]);

        $formula = $this->formulaService->suggestFormula($validated);

        return response()->json([
            'formula' => $formula,
        ]);
    }
}
