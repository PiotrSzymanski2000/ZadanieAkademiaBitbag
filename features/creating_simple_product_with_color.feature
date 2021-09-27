@managing_products_color
    Feature: Creating a product with color
        In order to add new option
        As an Administrator
        I want to be able to add product with color

        Background:
            Given the store operates on a single channel in "United States"
            And I am logged in as an administrator

        @ui
        Scenario: Creating a product with color
            Given I want to create a new simple product
            When I specify its code as "BOARD_DICE_BREWING"
            And I name it "Dice Brewing" in "English (United States)"
            And I set its slug to "dice-brewing" in "English (United States)"
            And I set its price to "$10.00" for "United States" channel
            And I set its original price to "$20.00" for "United States" channel
            And I add it
            Then I should be notified that it has been successfully created
            And the product "Dice Brewing" should appear in the store
