/*Ajout article*/ 
let title = document.getElementById("article-title");
let file = document.getElementById('file');
let content = document.getElementById('article-content');
/*Preview*/ 


function preview() {
    let articleTitle = document.querySelector(".article-title");
    let articleContent = document.querySelector(".article-content");
    let articleImage = document.querySelector(".box img"); // Assurez-vous que cette sélection pointe bien vers votre image de prévisualisation

    // Mettre à jour le titre et le contenu
    articleTitle.innerText = title.value;
    articleContent.innerText = content.value;

    // Vérifier si un fichier a été choisi
    if (file.files && file.files[0]) {
        // Créer une URL pour le fichier sélectionné et mettre à jour l'attribut src de l'image pour la prévisualisation
        let imgURL = URL.createObjectURL(file.files[0]);
        articleImage.src = imgURL;
        articleImage.alt = file.files[0].name; // Mettre à jour l'attribut alt avec le nom du fichier
    }
}