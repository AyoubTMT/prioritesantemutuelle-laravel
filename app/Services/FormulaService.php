<?php

namespace App\Services;

class FormulaService
{
    protected $formules;

    public function __construct()
    {
        // Load the JSON file containing formula details
        $this->formules = json_decode(file_get_contents(resource_path('data/formules.json')), true);
    }

    public function suggestFormula(array $userChoices)
    {
        $soins = $userChoices['soins'] ?? '';
        $hospitalisation = $userChoices['hospitalisation'] ?? '';
        $optique = $userChoices['optique'] ?? '';
        $aides_auditives = $userChoices['aides_auditives'] ?? '';
        $dentaire = $userChoices['dentaire'] ?? '';
        $medecines_douces = $userChoices['medecines_douces'] ?? '';

        // Fixed formulas
        if (
            $soins === "S1" &&
            $hospitalisation === "H1" &&
            $optique === "O1" &&
            $aides_auditives === "A1" &&
            $dentaire === "D1" &&
            $medecines_douces === "G1"
        ) {
            return $this->buildFormulaResponse("ECO");
        }

        if (
            $soins === "S4" &&
            $hospitalisation === "H4" &&
            $optique === "O4" &&
            $aides_auditives === "A4" &&
            $dentaire === "D4" &&
            $medecines_douces === "G4"
        ) {
            return $this->buildFormulaResponse("PREMIUM");
        }

        // Modulaire formulas
        if (
            $soins === "S2" &&
            in_array($hospitalisation, ["H1","H2", "H3", "H4"]) &&
            in_array($optique, ["O1", "O2", "O3", "O4"]) &&
            in_array($aides_auditives, ["A1", "A2", "A3", "A4"]) &&
            in_array($dentaire, ["D1", "D2", "D3", "D4"]) &&
            $medecines_douces === "G2"
        ) {
            return $this->buildFormulaResponse("CONFORT");
        }

        if (
            $soins === "S3" &&
            in_array($hospitalisation, ["H1","H2","H3", "H4"]) &&
            in_array($optique, ["O1", "O2", "O3", "O4"]) &&
            in_array($aides_auditives, ["A1", "A2", "A3", "A4"]) &&
            in_array($dentaire, ["D1", "D2", "D3", "D4"]) &&
            $medecines_douces === "G3"
        ) {
            return $this->buildFormulaResponse("PRESTIGE");
        }

        // If no exact match, find the closest formula
        $bestMatch = $this->findClosestFormula($userChoices);

        return $this->buildFormulaResponse($bestMatch ?? "No suitable formula found");
    }

    private function findClosestFormula(array $userChoices)
    {
        $formulas = [
            "ECO" => ["soins" => "S1", "hospitalisation" => "H1", "optique" => "O1", "aides_auditives" => "A1", "dentaire" => "D1", "medecines_douces" => "G1"],
            "CONFORT" => ["soins" => "S2", "hospitalisation" => "H2", "optique" => "O2", "aides_auditives" => "A2", "dentaire" => "D2", "medecines_douces" => "G2"],
            "PRESTIGE" => ["soins" => "S3", "hospitalisation" => "H3", "optique" => "O3", "aides_auditives" => "A3", "dentaire" => "D3", "medecines_douces" => "G3"],
            "PREMIUM" => ["soins" => "S4", "hospitalisation" => "H4", "optique" => "O4", "aides_auditives" => "A4", "dentaire" => "D4", "medecines_douces" => "G4"],
        ];

        $bestMatch = null;
        $maxMatches = 0;

        foreach ($formulas as $formulaName => $criteria) {
            $matches = 0;
            foreach ($criteria as $key => $value) {
                if (isset($userChoices[$key]) && $userChoices[$key] === $value) {
                    $matches++;
                }
            }

            if ($matches > $maxMatches) {
                $maxMatches = $matches;
                $bestMatch = $formulaName;
            }
        }

        return $bestMatch;
    }

    private function buildFormulaResponse(string $formulaName)
    {
        if ($formulaName === "No suitable formula found") {
            return [
                "formula" => $formulaName,
                "details" => []
            ];
        }
    
        // Map formulas to their corresponding levels in JSON
        $levels = [
            "ECO" => ["soins" => "S1", "hospitalisation" => "H1", "optique" => "O1", "aides_auditives" => "A1", "dentaire" => "D1", "medecines_douces" => "G1"],
            "CONFORT" => ["soins" => "S2", "hospitalisation" => "H2", "optique" => "O2", "aides_auditives" => "A2", "dentaire" => "D2", "medecines_douces" => "G2"],
            "PRESTIGE" => ["soins" => "S3", "hospitalisation" => "H3", "optique" => "O3", "aides_auditives" => "A3", "dentaire" => "D3", "medecines_douces" => "G3"],
            "PREMIUM" => ["soins" => "S4", "hospitalisation" => "H4", "optique" => "O4", "aides_auditives" => "A4", "dentaire" => "D4", "medecines_douces" => "G4"]
        ];
    
        if (!isset($levels[$formulaName])) {
            return [
                "formula" => "Invalid formula name",
                "details" => []
            ];
        }
    
        $formulaLevels = $levels[$formulaName];
    
        // Fetch details for each level from the JSON data
        $details = [
            "soins_courants" => $this->formules["soins_courants"][$formulaLevels["soins"]],
            "hospitalisation" => $this->formules["hospitalisation"][$formulaLevels["hospitalisation"]],
            "optique" => $this->formules["optique"][$formulaLevels["optique"]],
            "aides_auditives" => $this->formules["aides_auditives"][$formulaLevels["aides_auditives"]],
            "dentaire" => $this->formules["dentaire"][$formulaLevels["dentaire"]],
            "prevention_et_medecines_douces" => $this->formules["prevention_et_medecines_douces"][$formulaLevels["medecines_douces"]]
        ];
    
        return [
            "formula" => $formulaName,
            "details" => $details
        ];
    }
    
}
