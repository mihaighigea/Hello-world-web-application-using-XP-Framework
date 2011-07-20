<?php
/* This class is part of the XP framework
 *
 * $Id:$
 */

  uses(
    'scriptlet.xml.workflow.AbstractAuthenticatedState'
  );

  /**
   * State
   *
   * @purpose  State
   */
  class HomeState extends AbstractAuthenticatedState {

    /**
     * Process this state.
     *
     * @param   &scriptlet.xml.workflow.WorkflowScriptletRequest request
     * @param   &scriptlet.xml.XMLScriptletResponse response
     * @param   &scriptlet.xml.workflow.Context context
     */

    public function process ($request, $response, $context) {
        $response->addFormResult(new Node('node', 'This is a test!'));
    }

  }
?>
