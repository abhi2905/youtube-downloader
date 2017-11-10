<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Vision_GoogleCloudVisionV1AnnotateImageResponse extends Google_Collection
{
  protected $collection_key = 'textAnnotations';
  protected $cropHintsAnnotationType = 'Google_Service_Vision_GoogleCloudVisionV1CropHintsAnnotation';
  protected $cropHintsAnnotationDataType = '';
  protected $errorType = 'Google_Service_Vision_GoogleRpcStatus';
  protected $errorDataType = '';
  protected $faceAnnotationsType = 'Google_Service_Vision_GoogleCloudVisionV1FaceAnnotation';
  protected $faceAnnotationsDataType = 'array';
  protected $fullTextAnnotationType = 'Google_Service_Vision_GoogleCloudVisionV1TextAnnotation';
  protected $fullTextAnnotationDataType = '';
  protected $imagePropertiesAnnotationType = 'Google_Service_Vision_GoogleCloudVisionV1ImageProperties';
  protected $imagePropertiesAnnotationDataType = '';
  protected $labelAnnotationsType = 'Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation';
  protected $labelAnnotationsDataType = 'array';
  protected $landmarkAnnotationsType = 'Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation';
  protected $landmarkAnnotationsDataType = 'array';
  protected $logoAnnotationsType = 'Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation';
  protected $logoAnnotationsDataType = 'array';
  protected $safeSearchAnnotationType = 'Google_Service_Vision_GoogleCloudVisionV1SafeSearchAnnotation';
  protected $safeSearchAnnotationDataType = '';
  protected $textAnnotationsType = 'Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation';
  protected $textAnnotationsDataType = 'array';
  protected $webDetectionType = 'Google_Service_Vision_GoogleCloudVisionV1WebDetection';
  protected $webDetectionDataType = '';

  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1CropHintsAnnotation
   */
  public function setCropHintsAnnotation(Google_Service_Vision_GoogleCloudVisionV1CropHintsAnnotation $cropHintsAnnotation)
  {
    $this->cropHintsAnnotation = $cropHintsAnnotation;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1CropHintsAnnotation
   */
  public function getCropHintsAnnotation()
  {
    return $this->cropHintsAnnotation;
  }
  /**
   * @param Google_Service_Vision_GoogleRpcStatus
   */
  public function setError(Google_Service_Vision_GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /**
   * @return Google_Service_Vision_GoogleRpcStatus
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1FaceAnnotation
   */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1FaceAnnotation
   */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1TextAnnotation
   */
  public function setFullTextAnnotation(Google_Service_Vision_GoogleCloudVisionV1TextAnnotation $fullTextAnnotation)
  {
    $this->fullTextAnnotation = $fullTextAnnotation;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1TextAnnotation
   */
  public function getFullTextAnnotation()
  {
    return $this->fullTextAnnotation;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1ImageProperties
   */
  public function setImagePropertiesAnnotation(Google_Service_Vision_GoogleCloudVisionV1ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1ImageProperties
   */
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation
   */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation
   */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation
   */
  public function setLandmarkAnnotations($landmarkAnnotations)
  {
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation
   */
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation
   */
  public function setLogoAnnotations($logoAnnotations)
  {
    $this->logoAnnotations = $logoAnnotations;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation
   */
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1SafeSearchAnnotation
   */
  public function setSafeSearchAnnotation(Google_Service_Vision_GoogleCloudVisionV1SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1SafeSearchAnnotation
   */
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation
   */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1EntityAnnotation
   */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1WebDetection
   */
  public function setWebDetection(Google_Service_Vision_GoogleCloudVisionV1WebDetection $webDetection)
  {
    $this->webDetection = $webDetection;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1WebDetection
   */
  public function getWebDetection()
  {
    return $this->webDetection;
  }
}
