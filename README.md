# CP3402 - TJC Theme
<h1>Welcome to the Team</h1>
<p>
This theme is used for Group 25's submission of CP3402 Assessment 2. The theme was created with Underscores.
</p>
<h4>Theme Details</h4>
<p><strong>Name</strong>: tjc_theme<br>
<strong>Theme URI</strong>: https://github.com/cp3402-students/2020-sp1-project-group25-cp3402a2<br>
<strong>Author</strong>: Group 25<br>
<strong>Author URI</strong>: https://github.com/cp3402-students/2020-sp1-project-group25-cp3402a2</p>

<h2>Plugins: An Overview</h2>
<h3>MetaSlider</h3>
<p></p>
<h3>WP Google Maps</h3>
<p></p>

<h2>How to add Content</h2>
<p>All of our content is created using WordPress pages. Once a page has been added make sure that you add it to a menu. All of the pages on currently on the site were made with the Gutenberg Editor</p>

<h2> Setting up local enviroment </h2>
<p>1) Install development dependencies (git, Virtual Box, wpdistillery, vagrant & scotchbox).
You can install a <a href="https://github.com/lindsaymarkward/WPDistillery">custom version of wpdistillery</a> that will also install vagrant & scotchbox for you.<br>
<a href="https://linuxize.com/post/how-to-install-virtualbox-on-ubuntu-18-04/">Documentation to install VirtualBox</a><br>
<code>apt install git</code><br>
<code>git clone 'https://github.com/lindsaymarkward/WPDistillery.git'</code><br>
2) <code>cd</code> into the wpdistillery file and run <code>vagrant up</code>.<br>
3) Make a cup of tea and wait for it to install
</p>

<h2>How to Update the Staging Site</h2>
<p>This GitHub repository includes a webhook that will automatically perform a pull when the remote repository is updated. Simply commit and push your work and the site should update.</p>

<h2>GitHub Best Practices</h2>
Due to the number of developers working on the site it is important to maintain good version control practies. Please enter the below commands in order when committing and pushing from the command line. Make sure to run <code>git pull --rebase</code> before running <code>git push</code>.


<h2>Troubleshooting the WebHook</h2>
<p>If the site does not update there may be a problem with the webhook.</p>
<p>Check the Recent Deliveries section (Settings>WebHooks>http://157.245.163.169/wp-content/hook_log.txt) and check that the posts are being delivered.</p>
<p>Next check the <a href="http://157.245.163.169/wp-content/hook_log.txt">hook log file</a> and scroll down to the most recent pull attempt. If you only see <code>updating *bunch of characters*</code> and no log of the files that were changed something has gone wrong in the pull. You'll need to log into the server using SSH and try to pull manually to see what the problem is.</p>

<h2> Creating/Joining our live with SSH </h2>
<p>
#Note: All commands just be run on a UNIX command line (we use Git Bash).<br>
1) Create an SSH key by running <code>ssh-keygen</code> in command line. DO NOT FORGET YOUR PASSPHRASE!!!<br>
2) Copy the output of <code>cat ~/.ssh/id_rsa.pub</code><br>
3) Get your parents to log into the server for you using SSH.<br> 
4) Get your parents to run <code>nano ~/.ssh/authorized_keys</code> and copy the output of Step 2 into the file.<br>
5) After this, you should be able to access the server with <code>ssh root@ip_address</code>. Check the Group 25 Slack to find the IP addresses of the Staging and Production Server.
</p> 

<h2>Wordmove: How to Move files to Live</h2>
<p>This server's we use transfer files using a Ruby script called Wordmove.<br>
1) Log into the Live server using SSH<br>
2) run <code>cd /var/www/html</code> and then <code>wordmove pull</code> with the appropriate options.</p>