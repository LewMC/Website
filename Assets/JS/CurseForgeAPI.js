function getCurseForgeOverview(asset) {
    fetch('/api/curseforge?overview='+ asset)
        .then((response) => response.text())
        .then((result) => {
            let json = JSON.parse(result);
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
                console.log(json);
                fetchedVersions = true;
                let versionsGrid = '';
                let foundFirstRelease = false;
                for (let version in json.data) {
                    if (json.data[version].fileStatus === 4) {
                        versionsGrid += `<a target="_blank" href="https://curseforge.com/minecraft/modpack/${asset}/files/${json.data[version].id}" class="card-link relative" id="${json.data[version].id}"><h3>${json.data[version].displayName}</h3><p>For Minecraft ${json.data[version].gameVersions[0]} - ${json.data[version].gameVersions[json.data[version].gameVersions.length - 1]}</p></a>`;
                    }
                    foundFirstRelease = true;
                }
                document.getElementById('download').innerHTML = versionsGrid;
            })
            .catch((error) => console.error(error));
    }
}