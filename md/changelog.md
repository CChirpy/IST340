# changelog

### 2022-04-08, new code + media queries
"better comments, moved around files and folders, redoing lots of code"
- ADDED:
   - `_variable.scss`
- UPDATED:
   - homepage description
   - redoing stylesheets, kept some of the typography

### 2022-04-07, reorganizing
- ADDED:
   - `"sortDirectoriesFirst": true` to brackets.json to fix file sort
      - https://github.com/adobe/brackets/issues/2935#issuecomment-41731307
   - `layout.scss` and `layout.css`
- UPDATED 
   - `.gitignore`, ignore sass mapping
   - `index.html`
      - more comments
   - `.brackets.json` to add more scss files
   - reduced redundancy in typography code

### 2022-04-05, reorganizing
- MOVED:
   - `index.html` and `about.html` to archive folder
   - `changelog.md` and `resources.md` to md folder
- CREATED:
   - `index.html`
   - `about.html`
   - `blog.html`
   - `contact.html`
   - `notebooks.html`
   - `work.html`

### 2022-03-25, css overhaul
- ADDED:
   - partials to scss
      - took most from wip portfolio from spring break
   - barebones to `ist340.html`
- ASSIGNMENTS: 
   - redid `constitution.html` assignment
   - Lists, Images, & Positioning assignment `recipe.html`
- UPDATES:
   - moved `md` files again
   - changed `about.html` links to go to github

### 2022-03-04, constitution assignment
- added fonts Courier Prime and Inconsolata
- started adding scss modules
- todo: change font sizes
- completed constitution css assignment
- moved notes to `md` folder

### 2022-03-01, in-class
- html font size to fix safari display
- switched to rem
- looked for fonts

### 2022-02-18, drawer finished + started about page
- UPDATED:
   - drawer is functional now
      - close button
      - animation/transition
      - can contain text
   - added temporary margin to nav
   - recentered images in buttons
- ADDED: 
   - `about.html`
      - validation icons
      - sections
         - About this site, About me
         - linked changelog and resources
         - section id styles (temp)
      - paragraph links has `:visited` color

### 2022-02-15, another drawer update
- UPDATED:
   - both drawer and darkmode buttons are in absolute positionx

### 2022-02-14, wip drawer
- REMOVED:
   - extra folder that was appearing on github but not on local machine `git rm -r --cached Notes`
- ADDED:
   - started working on drawer
- PLANNED:
   - add `<noscript>`
   - add css animations

### 2022-02-13, better buttons
- ADDED:
   - svg icons
   - drawer button (currently nonfunctional)
- REMOVED:
   - `home.css`
- UPDATED:
   - `base.css` back to `styles.css`
   - button appearances
      - icons, shape, color, shadow
   - `styles.scss` to use parent selectors

### 2022-02-11, sass + darkmode
- CREATED:
   - redid index.html
   - installed Sass
      - `styles.scss`
   - darkmode
- UPDATED:   
   - reorganized folders
      - moved md notes outside of website root
      - moved content from `ref.md` to `README.md`
      - changed `styles.css` to `base.css`
      - created `home.css`

### 2022-02-04, setting up + basic html
- CREATED:
   - Notes folder
      - moved `changelog.md`
      - created `ref.md`
   - styles and images folder
   - `styles.css`
   - `about.html` and `contact.html`
- UPDATED:
   - added content to `index.html`


### 2022-01-31, added class tutorials
- ADDED:
   - "MindTap Tutorials" folder (115 MB)
      - datafiles-animation
      - datafiles-student, contains code
   - Finished html01/case1 assignment 
      - T1 Case Problem 1: Jedds Tree Care

### 2022-01-28, started project
- created project folder "IST340"
- created git repo "IST340"
- ADDED:
   - `index.html`
   - `changelog.md`
   - `README.md`