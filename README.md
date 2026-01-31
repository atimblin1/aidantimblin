# Aidan Timblin - Personal Website

A clean, SEO-optimized single-page portfolio website for Aidan Timblin, Junior Web Developer.

## 🚀 Deployment Instructions (GitHub Pages)

### 1. Repository Setup

The repository is already initialized. Now push the files:

```bash
cd ~/aidantimblin
git add .
git commit -m "Initial commit: Add personal portfolio website"
git push -u origin main
```

If your default branch is `master` instead of `main`, use:
```bash
git branch -M main
git push -u origin main
```

### 2. Enable GitHub Pages

1. Go to your repository on GitHub: https://github.com/atimblin1/aidantimblin
2. Click **Settings** (top navigation)
3. Scroll to **Pages** (left sidebar)
4. Under **Source**, select:
   - Branch: `main`
   - Folder: `/ (root)`
5. Click **Save**
6. GitHub will provide your site URL: `https://atimblin1.github.io/aidantimblin/`

### 3. Update Domain References (Optional - Custom Domain)

If you purchase a custom domain (e.g., `aidantimblin.com`):

1. Update the following in `index.html`:
   - All `https://aidantimblin.com/` references
   - Open Graph image URLs
   - Canonical tag
2. Update `sitemap.xml` with your custom domain
3. Update `robots.txt` with your custom domain
4. In GitHub Pages settings, add your custom domain
5. Configure DNS with your domain provider:
   - Add CNAME record pointing to `atimblin1.github.io`
   - Or A records pointing to GitHub Pages IPs

### 4. Verify SEO Setup

After deployment:

- **Test the site**: Visit your GitHub Pages URL
- **Check meta tags**: View page source and verify all meta tags are present
- **Test mobile responsiveness**: Use Chrome DevTools or mobile device
- **Validate HTML**: Use [W3C Validator](https://validator.w3.org/)
- **Test structured data**: Use [Google Rich Results Test](https://search.google.com/test/rich-results)
- **Submit to Google**: Use [Google Search Console](https://search.google.com/search-console)
  - Add your property
  - Submit your sitemap URL
  - Request indexing for your homepage

### 5. Monitoring & Indexing

**Google Search Console**:
1. Add and verify your site
2. Submit sitemap: `https://yourdomain.com/sitemap.xml`
3. Use URL Inspection tool to request indexing
4. Monitor coverage and performance

**Basic SEO Checklist**:
- ✅ Semantic HTML with proper heading hierarchy
- ✅ Meta description under 160 characters
- ✅ Title tag with name and title
- ✅ Open Graph and Twitter card tags
- ✅ JSON-LD structured data (Person schema)
- ✅ Canonical URL specified
- ✅ Robots.txt allows indexing
- ✅ Sitemap.xml present
- ✅ Mobile responsive
- ✅ Fast load times (no external dependencies)
- ✅ Accessible (semantic markup, ARIA labels)

## 📁 File Structure

```
aidantimblin/
├── index.html      # Main single-page website
├── styles.css      # Responsive CSS styling
├── sitemap.xml     # XML sitemap for search engines
├── robots.txt      # Crawler instructions
└── README.md       # This file
```

## 🛠️ Technologies

- **Pure HTML5**: Semantic markup
- **Modern CSS3**: Flexbox, Grid, custom properties
- **No frameworks**: Lightweight and fast
- **SEO optimized**: Meta tags, structured data, sitemap
- **Fully responsive**: Mobile-first design
- **Accessible**: ARIA labels, keyboard navigation

## 📝 Customization

To update content:
1. Edit `index.html` for text, links, and structure
2. Edit `styles.css` for colors, fonts, and layout
3. Update `sitemap.xml` if you add pages
4. Commit and push changes - GitHub Pages auto-deploys

## 📧 Contact

- **Email**: AidanTimblin@email.com
- **GitHub**: [@atimblin1](https://github.com/atimblin1)

---

Built with ❤️ using semantic HTML and modern CSS
