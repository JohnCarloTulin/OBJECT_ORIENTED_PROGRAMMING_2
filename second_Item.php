<?php
class QuadraticEquation {

    // Private Data Field to represent three coefficient
    private $__qxVarA;
    private $__qxVarB;
    private $__qxVarC;

    // Constructor for the arguments
    public function __construct($coefficient_A, $coefficient_B, $coefficient_C) {
        $this->__qxVarA = $coefficient_A;
        $this->__qxVarB = $coefficient_B;
        $this->__qxVarC = $coefficient_C;
    }

    // Getter for three coefficient
    public function getA() {
        return $this->__qxVarA;
    }

    public function getB() {
        return $this->__qxVarB;
    }

    public function getC() {
        return $this->__qxVarC;
    }

    // Formula for discriminant
    public function getDiscriminant() {
        return ($this->__qxVarB * $this->__qxVarB) - (4 * $this->__qxVarA * $this->__qxVarC);
    }

    // Method to get root 1 (positive)
    public function getPositiveRoot() {
        $__qxVarDisc = $this->getDiscriminant();
        if ($__qxVarDisc < 0) {
            return null; // No real root
        }
        return (-$this->__qxVarB + sqrt($__qxVarDisc)) / (2 * $this->__qxVarA);
    }

    // Method to get root 2 (negative)
    public function getNegativeRoot() {
        $__qxVarDisc = $this->getDiscriminant();
        if ($__qxVarDisc < 0) {
            return null; // No real root
        }
        return (-$this->__qxVarB - sqrt($__qxVarDisc)) / (2 * $this->__qxVarA);
    }
}

// Demonstration of the code
$quadraticEquationVariable = new QuadraticEquation(1, -3, 2);
echo "Coefficient a: " . $quadraticEquationVariable->getA() . "\n";
echo "Coefficient b: " . $quadraticEquationVariable->getB() . "\n";
echo "Coefficient c: " . $quadraticEquationVariable->getC() . "\n";
echo "The discriminant value: " . $quadraticEquationVariable->getDiscriminant() . "\n";
echo "Calculated Root #1: " . $quadraticEquationVariable->getPositiveRoot() . "\n";
echo "Calculated Root #2: " . $quadraticEquationVariable->getNegativeRoot() . "\n";
?>


