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
                let foundFirstRelease = false;
                for (let version in json) {
                    if (json[version].status === "listed") {
                        if (json[version].version_type === "beta") {
                            versionsGrid += `<a target="_blank" href="https://modrinth.com/plugin/${asset}/version/${json[version].version_number}" class="card-link relative" id="${json[version].version_number}"><h3>${json[version].name}</h3><p>For Minecraft ${json[version].game_versions[0]} - ${json[version].game_versions[json[version].game_versions.length - 1]}</p><span class="absolute top-0 right-0 bg-yellow-500 rounded-bl-md px-1 text-black">SNAPSHOT</span></a>`;
                        } else if (json[version].version_type === "release" && !foundFirstRelease) {
                            versionsGrid += `<a target="_blank" href="https://modrinth.com/plugin/${asset}/version/${json[version].version_number}" class="card-link relative" id="${json[version].version_number}"><h3>${json[version].name}</h3><p>For Minecraft ${json[version].game_versions[0]} - ${json[version].game_versions[json[version].game_versions.length - 1]}</p><span class="absolute top-0 right-0 bg-green-500 rounded-bl-md px-1 text-black">RECOMMENDED</span></a>`;
                            foundFirstRelease = true;
                        } else {
                            versionsGrid += `<a target="_blank" href="https://modrinth.com/plugin/${asset}/version/${json[version].version_number}" class="card-link relative" id="${json[version].version_number}"><h3>${json[version].name}</h3><p>For Minecraft ${json[version].game_versions[0]} - ${json[version].game_versions[json[version].game_versions.length - 1]}</p></a>`;
                        }
                    }
                }
                document.getElementById('download').innerHTML = versionsGrid;
            })
            .catch((error) => console.error(error));
    }
}