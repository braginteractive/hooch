## Hooch - A Bourbon, Neat, Bitters, and Refills WordPress theme.

[Demo](http://braginteractive.com/demo/hooch/)

Read more about Hooch and some of its features [here](http://braginteractive.com/a-bourbon-neat-bitters-and-refills-wordpress-theme/)

### Features
- Refills navigation
- Refills footer
- Refills pagination
- custom homepage template with Refills hero unit and icon bullet points
- WordPress customizer support
- custom widget areas in footer


#### For the Nerds
For customization, basic knowledge of the command line and the following dependencies are required to use Hooch:

- Bourbon ([http://bourbon.io/](http://bourbon.io/)) 
- Node ([http://nodejs.org/](http://nodejs.org/)) -`npm install`
- Gulp ([http://gulpjs.com/](http://gulpjs.com/)) - `npm install --global gulp`
- Bower ([http://bower.io/](http://bower.io/)) -`npm install -g bower`

#### Usage
After you've downloaded Hooch, and run `npm install` and `gulp` from the command line you can start using gulp.

#### Gulp

###### 1) Navigate to your new theme
`cd /your-project/wordpress/wp-content/themes/your-new-theme`

###### 2) Gulp tasks available:

`gulp` - Automatically handle changes to CSS, javascript, php, and image optimization. Also Livereload!

`gulp scripts` - Concatenate and minify javascript files

`gulp sass` - Compile, prefix, and minify CSS files

`gulp bower` - Install bower components

`gulp zip` - Creates a zipped file in the root of the theme. Ignores the bower_components and node_modules directories.
