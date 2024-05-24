function toggleTab(tab) {
    let overview = document.getElementById('overview').classList;
    let download = document.getElementById('download').classList;
    let license = document.getElementById('license').classList;
    let overviewBtn = document.getElementById('overview-btn').classList;
    let downloadBtn = document.getElementById('download-btn').classList;
    let licenseBtn = document.getElementById('license-btn').classList;

    if (!overview.contains('hidden')) {
        overview.add('hidden');
    }
    if (!download.contains('hidden')) {
        download.add('hidden');
    }
    if (!license.contains('hidden')) {
        license.add('hidden');
    }
    if (overviewBtn.contains('asset-nav-btn-active')) {
        overviewBtn.remove('asset-nav-btn-active');
    }
    if (downloadBtn.contains('asset-nav-btn-active')) {
        downloadBtn.remove('asset-nav-btn-active');
    }
    if (licenseBtn.contains('asset-nav-btn-active')) {
        licenseBtn.remove('asset-nav-btn-active');
    }

    document.getElementById(tab).classList.remove('hidden');
    document.getElementById(tab + '-btn').classList.add('asset-nav-btn-active');
}