#
# Cookbook Name:: apache2-magentodevsite
# Recipe:: default
#
# Copyright 2014, Stephen Lang
#
# All rights reserved - Do Not Redistribute
#
web_app "magento.dev" do
    server_name "magento.dev"
    server_aliases []
    docroot "/vagrant/htdocs"
end

%w{libapache2-mod-php5 php5-mcrypt}.each do |pkg|
    package pkg do
        action :install
    end
end

mysql_service 'default' do
    server_root_password 'vagrant'
    action :create
end
