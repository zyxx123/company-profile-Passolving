const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

const dir = path.join(__dirname, 'public/images/clients');

async function processImages() {
    const files = fs.readdirSync(dir);
    let totalSaved = 0;

    for (const file of files) {
        if (file.toLowerCase().endsWith('.png') || file.toLowerCase().endsWith('.jpg') || file.toLowerCase().endsWith('.jpeg')) {
            const inputPath = path.join(dir, file);
            const ext = path.extname(file);
            const base = path.basename(file, ext);
            const outputPath = path.join(dir, base + '.webp');
            
            const originalSize = fs.statSync(inputPath).size;
            
            console.log(`Mengonversi ${file}...`);
            await sharp(inputPath)
                .webp({ quality: 80, effort: 6 }) // Max effort for best compression
                .toFile(outputPath);
            
            const newSize = fs.statSync(outputPath).size;
            const saved = originalSize - newSize;
            totalSaved += saved;
            
            console.log(`=> Selesai! Ukuran turun dari ${(originalSize/1024).toFixed(1)}KB menjadi ${(newSize/1024).toFixed(1)}KB.`);
            
            // Hapus file asli
            fs.unlinkSync(inputPath);
        }
    }
    console.log(`\nBERHASIL! Total ruang penyimpanan yang dihemat: ${(totalSaved/1024/1024).toFixed(2)} MB!`);
}

processImages().catch(console.error);
