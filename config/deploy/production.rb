task :copy_dotenv do
  on roles(:all) do
    execute :cp, "#{shared_path}/.env #{release_path}/.env"
  end
end

server "web23.swisscenter.com", user: "maw11_3", ssh_options: {
  keys: %w(.ssh\id_rsa),
  forward_agent: false,
  auth_methods: %w(publickey)
}

set :deploy_to, "/home/maw11_3/my-galleries-pictures.ch"

set :keep_releases, 3

set :laravel_version, 8.82
set :laravel_ensure_acl_paths_exist, false
set :laravel_set_acl_paths, false
set :laravel_upload_dotenv_file_on_deploy, false

after 'composer:run', 'copy_dotenv'
after 'copy_dotenv', 'laravel:migrate'
