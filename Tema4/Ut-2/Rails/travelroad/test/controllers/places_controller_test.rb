require "test_helper"

class PlacesControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get places_index_url
    assert_response :success
  end

  test "should get wished" do
    get places_wished_url
    assert_response :success
  end

  test "should get visited" do
    get places_visited_url
    assert_response :success
  end
end
