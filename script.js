document.addEventListener("DOMContentLoaded", () => {
    console.log("Le site est vivant !")
})

document.addEventListener("DOMContentLoaded", () => {
    console.log("Le site est vivant !");

    const image = document.getElementById("photo-sarah");

    if (image) {
        // Petit effet dramatique avec délai
        setTimeout(() => {
            image.classList.add("apparait");
        }, 300);
    } else {
        console.warn("L’image Sarah n’a pas été trouvée !");
    }
});