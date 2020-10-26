Scenario: Create a category
  Given I have the payload:
    """
    {
      "name": "toto"
    }
    """
  When I request "POST /api/category"
  Then the response status code should be 201
  And the "name" property should equal "toto"