# Require any additional compass plugins here.
require 'net/ssh'
require 'net-sftp'

# Set this to the root of your project when deployed:
http_path = "../../wordpress2"
css_dir = "../../wordpress2/wp-content/themes/elevel_website/stylesheets"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "js"
project_type = :stand_alone
output_style = :nested
line_comments = false

# remote path of CSS directory
remote_theme_dir_absolute = '/70.32.99.159:21//httpdocs/wp-content/themes/elevel_website/stylesheets'

# SFTP Connection Details
sftp_host = '70.32.99.159'
sftp_user = 'eadmin'

# Callback to be used when a file change is written. This will upload to a remote WP install
on_stylesheet_saved do |filename|
  $local_path_to_css_file = css_dir + '/' + File.basename(filename)

  Net::SFTP.start( sftp_host, sftp_user, :password =&gt; sftp_pass ) do |sftp|
    puts sftp.upload! $local_path_to_css_file, remote_theme_dir_absolute + File.basename(filename)
    end
  puts ">>>> Compass is polling for changes. Press Ctrl-C to Stop"
$end
# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
