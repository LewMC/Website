let fetchedVersions = false;

function getModrinthDescription(asset) {
    fetch('/api/modrinth?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            let json = JSON.parse(result);
            document.getElementById('icon').src = json.icon_url;
            document.getElementById('versions').innerHTML = json.game_versions[0]+' - '+json.game_versions[json.game_versions.length - 1];
            document.getElementById('body').innerHTML = markdownToHTML(json.body);
        })
        .catch((error) => console.error(error));
}

function getModrinthVersions(asset) {
    if (fetchedVersions === false) {
        fetch('https://api.modrinth.com/v2/project/' + asset + '/version')
            .then((response) => response.text())
            .then((result) => {
                let json = JSON.parse(result);
                fetchedVersions = true;
                let versionsGrid = '';
                for (let version in json) {
                    console.log(json[version]);
                    versionsGrid += `<p>${items[i]}</p>`;
                }
                document.getElementById('download').innerHTML = versionsGrid;
            })
            .catch((error) => console.error(error));
    }
}