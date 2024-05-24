function getCurseForgeDescription(asset) {
    fetch('/api/curseforge?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            let json = JSON.parse(result);
            console.log(json);
            document.getElementById('icon').src = json.data.logo.url;
            document.getElementById('versions').innerHTML = json.latestFiles[0].gameVersions[0]+' - '+json.latestFiles[json.latestFiles.length - 1].gameVersions[0];
            document.getElementById('body').innerHTML = markdownToHTML(json.body);
        })
        .catch((error) => console.error(error));
}