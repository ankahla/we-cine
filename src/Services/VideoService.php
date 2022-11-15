<?php
namespace App\Services;

use App\Entity\VideoList;

final class VideoService extends AbstractApiService implements VideoServiceInterface
{
    public function getVideoList(string $movieId): VideoList
    {
        try {
            $data = $this->apiClient->get("movie/$movieId/videos");

            return $this->serializer->deserialize($data, VideoList::class, 'json');
        } catch (\Exception $e) {
            return new VideoList();
        }
    }
}
