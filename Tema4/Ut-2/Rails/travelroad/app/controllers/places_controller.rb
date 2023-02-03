class PlacesController < ApplicationController
  def index
  end

  def wished
    @wished = Place.where(visited: false)
  end

  def visited
    @visited = Place.where(visited: true)
  end
end
