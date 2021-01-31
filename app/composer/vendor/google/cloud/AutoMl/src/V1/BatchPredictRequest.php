<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/prediction_service.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PredictionService.BatchPredict][google.cloud.automl.v1.PredictionService.BatchPredict].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.BatchPredictRequest</code>
 */
class BatchPredictRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the model requested to serve the batch prediction.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The input configuration for batch prediction.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BatchPredictInputConfig input_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $input_config = null;
    /**
     * Required. The Configuration specifying where output predictions should
     * be written.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BatchPredictOutputConfig output_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $output_config = null;
    /**
     * Additional domain-specific parameters for the predictions, any string must
     * be up to 25000 characters long.
     * AutoML Natural Language Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for a text snippet, it will only produce results
     *   that have at least this confidence score. The default is 0.5.
     * AutoML Vision Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for an image, it will only produce results that
     *   have at least this confidence score. The default is 0.5.
     * AutoML Vision Object Detection
     * `score_threshold`
     * : (float) When Model detects objects on the image,
     *   it will only produce bounding boxes which have at least this
     *   confidence score. Value in 0 to 1 range, default is 0.5.
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding
     *   boxes returned per image. The default is 100, the
     *   number of bounding boxes returned might be limited by the server.
     * AutoML Video Intelligence Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for a video, it will only produce results that
     *   have at least this confidence score. The default is 0.5.
     * `segment_classification`
     * : (boolean) Set to true to request
     *   segment-level classification. AutoML Video Intelligence returns
     *   labels and their confidence scores for the entire segment of the
     *   video that user specified in the request configuration.
     *   The default is true.
     * `shot_classification`
     * : (boolean) Set to true to request shot-level
     *   classification. AutoML Video Intelligence determines the boundaries
     *   for each camera shot in the entire segment of the video that user
     *   specified in the request configuration. AutoML Video Intelligence
     *   then returns labels and their confidence scores for each detected
     *   shot, along with the start and end time of the shot.
     *   The default is false.
     *   WARNING: Model evaluation is not done for this classification type,
     *   the quality of it depends on training data, but there are no metrics
     *   provided to describe that quality.
     * `1s_interval_classification`
     * : (boolean) Set to true to request
     *   classification for a video at one-second intervals. AutoML Video
     *   Intelligence returns labels and their confidence scores for each
     *   second of the entire segment of the video that user specified in the
     *   request configuration. The default is false.
     *   WARNING: Model evaluation is not done for this classification
     *   type, the quality of it depends on training data, but there are no
     *   metrics provided to describe that quality.
     * AutoML Video Intelligence Object Tracking
     * `score_threshold`
     * : (float) When Model detects objects on video frames,
     *   it will only produce bounding boxes which have at least this
     *   confidence score. Value in 0 to 1 range, default is 0.5.
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding
     *   boxes returned per image. The default is 100, the
     *   number of bounding boxes returned might be limited by the server.
     * `min_bounding_box_size`
     * : (float) Only bounding boxes with shortest edge
     *   at least that long as a relative value of video frame size are
     *   returned. Value in 0 to 1 range. Default is 0.
     *
     * Generated from protobuf field <code>map<string, string> params = 5;</code>
     */
    private $params;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the model requested to serve the batch prediction.
     *     @type \Google\Cloud\AutoMl\V1\BatchPredictInputConfig $input_config
     *           Required. The input configuration for batch prediction.
     *     @type \Google\Cloud\AutoMl\V1\BatchPredictOutputConfig $output_config
     *           Required. The Configuration specifying where output predictions should
     *           be written.
     *     @type array|\Google\Protobuf\Internal\MapField $params
     *           Additional domain-specific parameters for the predictions, any string must
     *           be up to 25000 characters long.
     *           AutoML Natural Language Classification
     *           `score_threshold`
     *           : (float) A value from 0.0 to 1.0. When the model
     *             makes predictions for a text snippet, it will only produce results
     *             that have at least this confidence score. The default is 0.5.
     *           AutoML Vision Classification
     *           `score_threshold`
     *           : (float) A value from 0.0 to 1.0. When the model
     *             makes predictions for an image, it will only produce results that
     *             have at least this confidence score. The default is 0.5.
     *           AutoML Vision Object Detection
     *           `score_threshold`
     *           : (float) When Model detects objects on the image,
     *             it will only produce bounding boxes which have at least this
     *             confidence score. Value in 0 to 1 range, default is 0.5.
     *           `max_bounding_box_count`
     *           : (int64) The maximum number of bounding
     *             boxes returned per image. The default is 100, the
     *             number of bounding boxes returned might be limited by the server.
     *           AutoML Video Intelligence Classification
     *           `score_threshold`
     *           : (float) A value from 0.0 to 1.0. When the model
     *             makes predictions for a video, it will only produce results that
     *             have at least this confidence score. The default is 0.5.
     *           `segment_classification`
     *           : (boolean) Set to true to request
     *             segment-level classification. AutoML Video Intelligence returns
     *             labels and their confidence scores for the entire segment of the
     *             video that user specified in the request configuration.
     *             The default is true.
     *           `shot_classification`
     *           : (boolean) Set to true to request shot-level
     *             classification. AutoML Video Intelligence determines the boundaries
     *             for each camera shot in the entire segment of the video that user
     *             specified in the request configuration. AutoML Video Intelligence
     *             then returns labels and their confidence scores for each detected
     *             shot, along with the start and end time of the shot.
     *             The default is false.
     *             WARNING: Model evaluation is not done for this classification type,
     *             the quality of it depends on training data, but there are no metrics
     *             provided to describe that quality.
     *           `1s_interval_classification`
     *           : (boolean) Set to true to request
     *             classification for a video at one-second intervals. AutoML Video
     *             Intelligence returns labels and their confidence scores for each
     *             second of the entire segment of the video that user specified in the
     *             request configuration. The default is false.
     *             WARNING: Model evaluation is not done for this classification
     *             type, the quality of it depends on training data, but there are no
     *             metrics provided to describe that quality.
     *           AutoML Video Intelligence Object Tracking
     *           `score_threshold`
     *           : (float) When Model detects objects on video frames,
     *             it will only produce bounding boxes which have at least this
     *             confidence score. Value in 0 to 1 range, default is 0.5.
     *           `max_bounding_box_count`
     *           : (int64) The maximum number of bounding
     *             boxes returned per image. The default is 100, the
     *             number of bounding boxes returned might be limited by the server.
     *           `min_bounding_box_size`
     *           : (float) Only bounding boxes with shortest edge
     *             at least that long as a relative value of video frame size are
     *             returned. Value in 0 to 1 range. Default is 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the model requested to serve the batch prediction.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the model requested to serve the batch prediction.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The input configuration for batch prediction.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BatchPredictInputConfig input_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1\BatchPredictInputConfig
     */
    public function getInputConfig()
    {
        return isset($this->input_config) ? $this->input_config : null;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Required. The input configuration for batch prediction.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BatchPredictInputConfig input_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1\BatchPredictInputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\BatchPredictInputConfig::class);
        $this->input_config = $var;

        return $this;
    }

    /**
     * Required. The Configuration specifying where output predictions should
     * be written.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BatchPredictOutputConfig output_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1\BatchPredictOutputConfig
     */
    public function getOutputConfig()
    {
        return isset($this->output_config) ? $this->output_config : null;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Required. The Configuration specifying where output predictions should
     * be written.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.BatchPredictOutputConfig output_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1\BatchPredictOutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\BatchPredictOutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

    /**
     * Additional domain-specific parameters for the predictions, any string must
     * be up to 25000 characters long.
     * AutoML Natural Language Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for a text snippet, it will only produce results
     *   that have at least this confidence score. The default is 0.5.
     * AutoML Vision Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for an image, it will only produce results that
     *   have at least this confidence score. The default is 0.5.
     * AutoML Vision Object Detection
     * `score_threshold`
     * : (float) When Model detects objects on the image,
     *   it will only produce bounding boxes which have at least this
     *   confidence score. Value in 0 to 1 range, default is 0.5.
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding
     *   boxes returned per image. The default is 100, the
     *   number of bounding boxes returned might be limited by the server.
     * AutoML Video Intelligence Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for a video, it will only produce results that
     *   have at least this confidence score. The default is 0.5.
     * `segment_classification`
     * : (boolean) Set to true to request
     *   segment-level classification. AutoML Video Intelligence returns
     *   labels and their confidence scores for the entire segment of the
     *   video that user specified in the request configuration.
     *   The default is true.
     * `shot_classification`
     * : (boolean) Set to true to request shot-level
     *   classification. AutoML Video Intelligence determines the boundaries
     *   for each camera shot in the entire segment of the video that user
     *   specified in the request configuration. AutoML Video Intelligence
     *   then returns labels and their confidence scores for each detected
     *   shot, along with the start and end time of the shot.
     *   The default is false.
     *   WARNING: Model evaluation is not done for this classification type,
     *   the quality of it depends on training data, but there are no metrics
     *   provided to describe that quality.
     * `1s_interval_classification`
     * : (boolean) Set to true to request
     *   classification for a video at one-second intervals. AutoML Video
     *   Intelligence returns labels and their confidence scores for each
     *   second of the entire segment of the video that user specified in the
     *   request configuration. The default is false.
     *   WARNING: Model evaluation is not done for this classification
     *   type, the quality of it depends on training data, but there are no
     *   metrics provided to describe that quality.
     * AutoML Video Intelligence Object Tracking
     * `score_threshold`
     * : (float) When Model detects objects on video frames,
     *   it will only produce bounding boxes which have at least this
     *   confidence score. Value in 0 to 1 range, default is 0.5.
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding
     *   boxes returned per image. The default is 100, the
     *   number of bounding boxes returned might be limited by the server.
     * `min_bounding_box_size`
     * : (float) Only bounding boxes with shortest edge
     *   at least that long as a relative value of video frame size are
     *   returned. Value in 0 to 1 range. Default is 0.
     *
     * Generated from protobuf field <code>map<string, string> params = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Additional domain-specific parameters for the predictions, any string must
     * be up to 25000 characters long.
     * AutoML Natural Language Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for a text snippet, it will only produce results
     *   that have at least this confidence score. The default is 0.5.
     * AutoML Vision Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for an image, it will only produce results that
     *   have at least this confidence score. The default is 0.5.
     * AutoML Vision Object Detection
     * `score_threshold`
     * : (float) When Model detects objects on the image,
     *   it will only produce bounding boxes which have at least this
     *   confidence score. Value in 0 to 1 range, default is 0.5.
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding
     *   boxes returned per image. The default is 100, the
     *   number of bounding boxes returned might be limited by the server.
     * AutoML Video Intelligence Classification
     * `score_threshold`
     * : (float) A value from 0.0 to 1.0. When the model
     *   makes predictions for a video, it will only produce results that
     *   have at least this confidence score. The default is 0.5.
     * `segment_classification`
     * : (boolean) Set to true to request
     *   segment-level classification. AutoML Video Intelligence returns
     *   labels and their confidence scores for the entire segment of the
     *   video that user specified in the request configuration.
     *   The default is true.
     * `shot_classification`
     * : (boolean) Set to true to request shot-level
     *   classification. AutoML Video Intelligence determines the boundaries
     *   for each camera shot in the entire segment of the video that user
     *   specified in the request configuration. AutoML Video Intelligence
     *   then returns labels and their confidence scores for each detected
     *   shot, along with the start and end time of the shot.
     *   The default is false.
     *   WARNING: Model evaluation is not done for this classification type,
     *   the quality of it depends on training data, but there are no metrics
     *   provided to describe that quality.
     * `1s_interval_classification`
     * : (boolean) Set to true to request
     *   classification for a video at one-second intervals. AutoML Video
     *   Intelligence returns labels and their confidence scores for each
     *   second of the entire segment of the video that user specified in the
     *   request configuration. The default is false.
     *   WARNING: Model evaluation is not done for this classification
     *   type, the quality of it depends on training data, but there are no
     *   metrics provided to describe that quality.
     * AutoML Video Intelligence Object Tracking
     * `score_threshold`
     * : (float) When Model detects objects on video frames,
     *   it will only produce bounding boxes which have at least this
     *   confidence score. Value in 0 to 1 range, default is 0.5.
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding
     *   boxes returned per image. The default is 100, the
     *   number of bounding boxes returned might be limited by the server.
     * `min_bounding_box_size`
     * : (float) Only bounding boxes with shortest edge
     *   at least that long as a relative value of video frame size are
     *   returned. Value in 0 to 1 range. Default is 0.
     *
     * Generated from protobuf field <code>map<string, string> params = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParams($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->params = $arr;

        return $this;
    }

}

