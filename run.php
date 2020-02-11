system("clear");

echo "[*] Masukan web: ";
$web = trim(fgets(STDIN));
if (!$web){
system("clear");
echo "Web tidak ada\n";
return;
}
echo "[*] Masukan Lokasi File: ";
$file = trim(fgets(STDIN));
if (!$file){
system("clear");
echo "File Lokasi tidak ada\n";
return;
}
system("clear");
system("python2 webdav.py $web $file");

// CODED BY HANS PUTERA, MR.YOUKNOWME
