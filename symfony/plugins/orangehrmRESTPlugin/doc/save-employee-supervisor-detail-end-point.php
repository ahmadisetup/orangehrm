/**
* @api {post} /employee/:id/supervisor Save Supervisor Details
* @apiName saveEmployeeSupervisor
* @apiGroup Employee
* @apiVersion 0.1.0
*
* @apiParam {Number}  id Employee id
*
* @apiParam {Number} supervisorId Supervisor id.
* @apiParam {String} reportingMethod Reporting method to the supervisor.
* @apiSuccess {Object} Data success response
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*      {
*        "success": "Successfully saved"
*      }
*
* @apiError Bad-Response Saving failed.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 400 Bad Request
*     {
*       "error": ["Saving failed"]
*     }
*/