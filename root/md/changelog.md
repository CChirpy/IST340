# changelog
Live website: https://owd.tcnj.edu/~huangc8/ist340/

### 2022-04-15 to 04-16, responsive website pt. 2
- ADDED:
   - to `layout.css`
      - grids to media queries for desktops and tablets
         - Used [CSS Grid Generator](https://cssgrid-generator.netlify.app)
         - changed some values to EMs or auto
      - hid footer elements for phone
      - stickied sidebars
   - to `index.html`
      - links to mindtap cases
- REMOVED: 
   - from `index.html`
      - nav links: about, work (combined into homepage)
      - nav links from footer
- UPDATED:
   - `layout.css`
      - combined horizontal nav styles
      - simplified flexboxes
   - `base.css`
      - brightened some colors

### 2022-04-15, responsive website
- TO-DO:
   - add media queries
- ADDED: 
   - `layout.css`
      - flexboxes to nav, main, sidebar, and footer
      - gave bottom border to active nav link
      - nav spacing and overflow scroll
      - image size to 100%
   - to `index.html`
      - home to navigation
- UPDATED:
   - `base.css`
      - a:active color
      - increased wrap spacing

### 2022-04-12 to 04-13, restarted
- TO-DO: 
   - add flex layout in
   - add back in previous assignments
- NOTES:
   - went back to css after all this time experimenting with scss
   - took some inspiration from [Eric A. Meyer](https://meyerweb.com/ui/about.html)
      - came across his website while looking for an [html page to test css](http://web.simmons.edu/~grovesd/comm244/notes/week3/html-test-page.html)
- REMOVED:
   - everything (archived, moved to separate folder)
- ADDED:
   - `index.html`
   - `changelog.html`
   - `base.css`
      - colors
      - basic margins + padding

### 2022-04-11, update homepage
- ADDED:
   - `index.html`
      - added sections
         - section section
         - pinned links
      - added logo
   - `layout.scss`
      - attempt at fulfilling responsive webpage assignment
         - media queries
         - extra stuff to make it look a little less like a skeleton
- UPDATED:
   - `_typography.scss`
      - margins
      - line-height, note: need to change p later
   - moved `md` folder back into `notebooks` folder
   - renamed `notebooks` to `noteboook`

### 2022-04-08, new code
- Comments:
   - moved around files and folders
   - redoing lots of code, 
   - small change in workflow
      - better comments
      - tab size 5 for html
      - 3 space for css
      - instead of putting everything in `resources.md`, links are commented within the code
- ADDED:
   - `_variable.scss`
   - code to `layout.scss`
      - body padding
      - flexbox, stretch main element
      - header navigation
- UPDATED:
   - homepage description
   - redoing stylesheets, kept some of the typography
      - removed redundant code, default font styles in `_base.scss`
   - reimported `constitution.html`
   - cleaned up `styles.scss` to be more minimal

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