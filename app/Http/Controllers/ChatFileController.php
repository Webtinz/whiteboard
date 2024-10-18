<?php

namespace App\Http\Controllers;

use App\Models\ChatFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Whiteboard\MessageController;

class ChatFileController extends Controller
{
    public function uploadFile(Request $request, $messageId)
    {
        // Modifier la validation pour accepter plusieurs fichiers
        $validated = $request->validate([
            'file.*' => 'file|max:20480', // Chaque fichier doit respecter la taille maximale
        ]);
    
        // Initialiser un tableau pour stocker les informations des fichiers
        $filePaths = [];
    
        // Boucle à travers chaque fichier
        foreach ($validated['file'] as $file) {
            // Stocker le fichier et obtenir le chemin
            $filePath = $file->store('uploads', 'public');
    
            // Créer une entrée dans la base de données pour chaque fichier
            ChatFile::create([
                'message_id' => $messageId,
                'file_path' => $filePath,
                'type' => $file->getClientOriginalExtension(),
                'size' => $this->formatFileSize($file->getSize()), // Ajoutez la taille ici
            ]);
    
            // Ajouter le chemin du fichier au tableau
            $filePaths[] = [
                // 'file_path' => $filePath,
                'size' => $this->formatFileSize($file->getSize()), // Ajoutez la taille ici également
            ];
        }
    
        // Retourner uniquement le tableau des chemins de fichiers et leurs tailles
        return $filePaths;
    }
    
    // Fonction pour formater la taille
    function formatFileSize($size) {
        if ($size >= 1024 * 1024 * 1024) {
            // Taille en Go
            return number_format($size / (1024 * 1024 * 1024), 2) . ' GB';
        } elseif ($size >= 1024 * 1024) {
            // Taille en Mo
            return number_format($size / (1024 * 1024), 2) . ' MB';
        } elseif ($size >= 1024) {
            // Taille en Ko
            return number_format($size / 1024, 2) . ' KB';
        } else {
            // Taille en octets
            return $size . ' Octets';
        }
    }
    
}
