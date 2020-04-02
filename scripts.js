window.onload = () => { // Nous attendons que le DOM soit entièrement chargé
    // Nous allons chercher la balise "link" contenant le thème
    let themeLink = document.getElementById("theme-link")

    // Nous vérifions si un thème est déjà stocké
    if(localStorage.theme != null){
        // Si un thème est stocké, nous le chargeons dans le href de la balise link
        themeLink.href = `css/style_${localStorage.theme}.css`
    }else{
        // Si aucun thème n'est stocké, nous initialisons le lien
        themeLink.href = `css/style_clair.css`
        // Nous stockons le thème clair
        localStorage.theme = "clair"
    }


   //écouteur d'événement "click" sur la span
document.getElementById("theme").addEventListener("click", function(){
    // Si le thème stocké est "clair"
    if(localStorage.theme == "clair"){
        // On stocke le thème "sombre"
        localStorage.theme = "sombre"
        // On prépare le texte de la span pour revenir au thème clair
        var themeText = "clair"
    }else{ // Sinon
        // On stocke le thème "clair"
        localStorage.theme = "clair"
        // On prépare le texte de la span pour revenir au thème sombre
        var themeText = "sombre"
    }
    // On met à jour le texte de la span
    this.innerText = `Thème ${themeText}`
    // On met à jour le href de la balise link
    themeLink.href = `css/style_${localStorage.theme}.css`
})
}
