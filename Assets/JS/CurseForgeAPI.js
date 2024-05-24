function getCurseForgeOverview(asset) {
    fetch('/api/curseforge?overview='+ asset)
        .then((response) => response.text())
        .then((result) => {
            let json = JSON.parse(result);
            console.log(json);
            document.getElementById('icon').src = json.data.logo.url;
            document.getElementById('versions').innerHTML = json.data.latestFilesIndexes[0].gameVersion+' - '+json.data.latestFilesIndexes[json.data.latestFilesIndexes.length - 1].gameVersion;
        })
        .catch((error) => console.error(error));
}

function getCurseForgeDescription(asset) {
    fetch('/api/curseforge?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            let json = JSON.parse(result);
            console.log(json);
            document.getElementById('body').innerHTML = markdownToHTML(json.data);
        })
        .catch((error) => console.error(error));
}