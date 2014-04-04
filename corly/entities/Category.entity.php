<?php

/**
 * Category short summary.
 *
 * Category description.
 *
 * @version 1.0
 * @author Filip
 */
class Category
{
    public $Name;
    private $TestCases;
    
    /**
     * Category constructor
     */
    public function __construct($Name)   {
        $this->Name = $Name;
        $this->TestCases = array();
    }
    
    /**
     * Add test case to category
     * @param test case
     */
    public function AddTestCase($testCase)  {
        $this->TestCases[] = $testCase;
    }
    
    /**
     * Get test cases
     * @return test cases
     */
    public function GetTestCases()  {
        return $this->TestCases;
    }
    
    /**
     * Get category name
     * @return name
     */
    public function GetName()   {
        return $this->Name;
    }
}