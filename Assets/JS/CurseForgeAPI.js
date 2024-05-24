function getCurseForgeDescription(asset) {
    fetch('/api/curseforge?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            console.log(result);
            let json = JSON.parse(result);
            document.getElementById('icon').src = json.data.logo.url;
            document.getElementById('versions').innerHTML = json.sortableGameVersions[0].gameVersion+' - '+json.sortableGameVersions[json.game_versions.length - 1].gameVersion;
            document.getElementById('body').innerHTML = markdownToHTML(json.body);
        })
        .catch((error) => console.error(error));
}