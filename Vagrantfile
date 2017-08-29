# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network"
  config.vm.provider "virtualbox" do |vb|
   vb.memory = "1024"
  end
  config.vm.network 'private_network', ip: '10.1.1.36'
  config.vm.provision "ansible" do |ansible|
      ansible.playbook = "provisioning/playbook.yml"
  end
end
