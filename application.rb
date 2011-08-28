# routes.rb

require 'sinatra'
require 'less'      # LESS CSS templates
require 'erb'
require 'liquid'
require 'redcloth'  # for textile
require 'partial_helper'

set :layout_engine => :erb
#set :erb, :layout_engine => :erb
set :textile, :layout_engine => :erb
set :liquid, :layout_engine => false

# use Rack::Auth::Basic "Restricted Area" do |username, password|
#     [username, password] == ['admin','admin']
# end

def authorized?
    @auth ||= Rack::Auth::Basic::Request.new(request.env)
    @auth.provided? && @auth.basic? && @auth.credentials == ['admin','admin']
end

def protected!
    unless authorized?
        response['WWW-Authenticate'] = %(Basic realm="Restricted Area")
        throw(:halt, [401, "Not authorized\n"])
    end
end

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


# Fox Valley Theological Society
get '/' do
    erb :home, :locals => {
        :data => YAML.load_file('views/event/2011-05-21.yml'),
        :sidebar => erb(
            :sidebar,
            :layout => false,
            :locals => {
                :data => [
                     YAML.load_file('views/event/2011-05-21.yml'),
                     YAML.load_file('views/event/2011-04-09.yml')
                ]
            }
        )
    }
end

get '/who_are_we' do
    textile :who_are_we
end

get '/events' do
    upcoming = [ liquid :event_item, :layout => false, :locals => { :data => YAML.load_file('views/event/2011-05-21.yml') } ]
    previous = [
        liquid(:event_item, :layout => false, :locals => { :data => YAML.load_file('views/event/2011-04-09.yml') } ),
        liquid(:event_item, :layout => false, :locals => { :data => YAML.load_file('views/event/2011-02-26.yml') } ),
        liquid(:event_item, :layout => false, :locals => { :data => YAML.load_file('views/event/2010-12-04.yml') } ),
    ]

    liquid :events, :layout_engine => :erb, :locals => {
        :upcoming => upcoming,
        :previous => previous,
    }
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

get '/test' do
    protected!
    str = ''
    Dir.foreach('views/event') { |f|
        next if f.index('.') == 0
        str << "#{f}<br>"
    }
    str
end
