import CatalogList from "./components/catalog-post.js";

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init)
} else {
    init()
}

function init() {
    new CatalogList(document.getElementById('post'))
}