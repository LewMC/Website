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

function getCurseForgeVersions(asset) {
    if (fetchedVersions === false) {
        fetch('/api/curseforge?versions='+ asset)
            .then((response) => response.text())
            .then((result) => {
                let json = JSON.parse(result);
                fetchedVersions = true;
                let versionsGrid = '';
                let foundFirstRelease = false;
                for (let version in json) {
                    if (json[version].data.fileStatus === 1) {
                        versionsGrid += `<a target="_blank" href="https://curseforge.com/minecraft/modpack/${asset}/files/${json[version].data.id}" class="card-link relative" id="${json[version].data.id}"><h3>${json[version].data.displayName}</h3><p>For Minecraft ${json[version].data.gameVersions[0]} - ${json[version].data.gameVersions[json[version].data.gameVersions.length - 1]}</p></a>`;
                    }
                }
                document.getElementById('download').innerHTML = versionsGrid;
            })
            .catch((error) => console.error(error));
    }
}