import type { RowNode } from '../entities/rowNode';
/**
 * Gets called by: a) ClientSideNodeManager and b) GroupStage to do sorting.
 * when in ClientSideNodeManager we always have indexes (as this sorts the items the
 * user provided) but when in GroupStage, the nodes can contain filler nodes that
 * don't have order id's
 * @param {RowNode[]} rowNodes
 * @param {Object} rowNodeOrder
 *
 * @returns a boolean representing whether nodes were reordered
 */
export declare function _sortRowNodesByOrder(rowNodes: RowNode[] | null, rowNodeOrder: {
    [id: string]: number;
}): boolean;