Rails.application.routes.draw do
  root "places#index"
  get "/places", to: "places#index"
  get "/wished", to: "places#wished"
  get "/visited", to: "places#visited"
end
