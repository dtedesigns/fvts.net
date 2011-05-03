# routes.rb

require 'sinatra'
require 'less'      # LESS CSS templates
require 'haml'
require 'erb'
require 'rdiscount' # for markdown
require 'redcloth'  # for textile

set :layout_engine => :erb
set :textile, :layout_engine => :erb

# Examples
post '/' do
    # create something
end


put '/' do
    # replace something
end

#patch '/' do
    # modify something
#end

delete '/' do
    # annihilate something
end

options '/' do
    # appease something
end


get '/hello/:name' do |n|
    "Hello #{n}!"
end

get '/haml' do
    haml :example
end

get '/erb' do
    erb :example
end

get '/markdown' do
    markdown :example
end

get '/textile' do
    textile :example
end

# Fox Valley Theological Society
get '/' do
    erb :home
end

get '/who_are_we' do
    textile :who_are_we
end

get '/events' do
	erb :events
end

get '/talk_to_me' do
    textile :talk_to_me
end

# Possible stylesheet route
get '/style/:name' do |n|
	less :"style/#{n}"
end

get '/default.css' do
	#"put template here"
	less :"style/default"
end
