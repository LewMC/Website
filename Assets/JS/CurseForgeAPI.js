function getCurseForgeDescription(asset) {
    fetch('/api/curseforge?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            let json = JSON.parse(result);
            document.getElementById('icon').src = json.data.logo.url;
            document.getElementById('versions').innerHTML = json.game_versions[0]+' - '+json.game_versions[json.game_versions.length - 1];
            document.getElementById('body').innerHTML = markdownToHTML(json.body);
        })
        .catch((error) => console.error(error));
}