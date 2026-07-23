const fs = require('fs');
const path = require('path');
const sharp = require('sharp');
const heicConvert = require('heic-convert');

const dir = path.join(__dirname, 'public/images/foto_utama');

async function processImages() {
    const files = fs.readdirSync(dir);
    let totalSaved = 0;

    for (const file of files) {
        const ext = path.extname(file).toLowerCase();
        if (ext === '.png' || ext === '.jpg' || ext === '.jpeg' || ext === '.heic') {
            const inputPath = path.join(dir, file);
            const base = path.basename(file, path.extname(file));
            const outputPath = path.join(dir, base + '.webp');
            
            const originalSize = fs.statSync(inputPath).size;
            
            console.log(`Mengonversi ${file}...`);
            
            try {
                let imageInput = inputPath;
                if (ext === '.heic') {
                    const inputBuffer = fs.readFileSync(inputPath);
                    console.log(`Decoding HEIC ${file} (this might take a few moments)...`);
                    imageInput = await heicConvert({
                        buffer: inputBuffer,
                        format: 'JPEG',
                        quality: 1
                    });
                }
                
                await sharp(imageInput)
                    .webp({ quality: 80, effort: 6 }) // Max effort for best compression
                    .toFile(outputPath);
                
                const newSize = fs.statSync(outputPath).size;
                const saved = originalSize - newSize;
                totalSaved += saved;
                
                console.log(`=> Selesai! Ukuran turun dari ${(originalSize/1024).toFixed(1)}KB menjadi ${(newSize/1024).toFixed(1)}KB.`);
                
                // Hapus file asli
                fs.unlinkSync(inputPath);
            } catch (err) {
                console.error(`Gagal mengonversi ${file}:`, err);
            }
        }
    }
    console.log(`\nBERHASIL! Total ruang penyimpanan yang dihemat: ${(totalSaved/1024/1024).toFixed(2)} MB!`);
}

processImages().catch(console.error);
